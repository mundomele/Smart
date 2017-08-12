// A lot of this code is from the original feedToJson function that was included with this project
// The new code allows for multiple feeds to be used but a bunch of variables and such have literally been copied and pasted into this code and some help from here: http://jsfiddle.net/BDK46/
// The original version can be found here: http://airshp.com/2011/jquery-plugin-feed-to-json/
var news = {
	feed: config.news.feed || null,
	newsHeadLocation: '.newshead',
	newsDescLocation: '.news',
	newsHeader: [],
	seenNewsHeader: [],
	newsDesc: [],
	seenNewsDesc: [],
	_yqURL: 'http://query.yahooapis.com/v1/public/yql',
	_yqlQS: '?format=json&q=select%20*%20from%20rss%20where%20url%3D',
	_cacheBuster: Math.floor((new Date().getTime()) / 1200 / 1000),
	_failedAttempts: 0,
	fetchInterval: config.news.fetchInterval || 60000,
	updateInterval: config.news.interval || 10000,
	fadeInterval: config.news.fadeInterval || 2000,
	intervalId: null,
	fetchNewsIntervalId: null
}

/**
 * Creates the query string that will be used to grab a converted RSS feed into a JSON object via Yahoo
 * @param  {string} feed The original location of the RSS feed
 * @return {string}      The new location of the RSS feed provided by Yahoo
 */
news.buildQueryString = function (feed) {

	return this._yqURL + this._yqlQS + '\'' + encodeURIComponent(feed) + '\'';

}

/**
 * Fetches the news for each feed provided in the config file
 */
news.fetchNews = function () {

	// Reset the news feed
	this.newsHeader = [];
	this.newsDesc = [];
	
	this.feed.forEach(function (_curr) {

		var _yqUrlString = this.buildQueryString(_curr);
		this.fetchFeed(_yqUrlString);

	}.bind(this));

}

/**
 * Runs a GET request to Yahoo's service
 * @param  {string} yqUrl The URL being used to grab the RSS feed (in JSON format)
 */
news.fetchFeed = function (yqUrl) {

	$.ajax({
		type: 'GET',
		datatype:'jsonp',
		url: yqUrl,
		success: function (data) {

			if (data.query.count > 0) {
				this.parseFeed(data.query.results.item);
			} else {
				console.error('No feed results for: ' + yqUrl);
			}

		}.bind(this),
		error: function () {
			// non-specific error message that should be updated
			console.error('No feed results for: ' + yqUrl);
		}
	});

}

/**
 * Parses each item in a single news feed
 * @param  {Object} data The news feed that was returned by Yahoo
 * @return {boolean}      Confirms that the feed was parsed correctly
 */
news.parseFeed = function (data) {

	var _rssItems = [];
	var _rssItems2 = [];
	for (var i = 0, count = data.length; i < count; i++) {
            
		_rssItems.push(data[i].title);
		_rssItems2.push("<img src='"+data[i].thumbnail.url+"'>");
	}
	this.newsHeader = this.newsHeader.concat(_rssItems);
	this.newsDesc = this.newsDesc.concat(_rssItems2);
	return true;
}

/**
 * Loops through each available and unseen news feed after it has been retrieved from Yahoo and shows it on the screen
 * When all news titles have been exhausted, the list resets and randomly chooses from the original set of items
 * @return {boolean} Confirms that there is a list of news items to loop through and that one has been shown on the screen
 */
news.showNews = function () {

	// If all items have been seen, swap seen to unseen
	if (this.newsHeader.length === 0 && this.seenNewsHeader.length !== 0) {

		if (this._failedAttempts === 20) {
			console.error('Failed to show a news story 20 times, stopping any attempts');
			return false;
		}

		this._failedAttempts++;

		setTimeout(function () {
			this.showNews();
		}.bind(this), 3000);

	} else if (this.newsHeader.length === 0 && this.seenNewsHeader.length !== 0) {
		this.newsHeader = this.seenNewsHeader.splice(0);
		this.newsDesc = this.seenNewsDesc.splice(0);
	}

	var _location = Math.floor(Math.random() * this.newsHeader.length);

	var _Header = news.newsHeader.splice(_location, 1)[0];
	var _Desc = news.newsDesc.splice(_location, 1)[0];

	this.seenNewsHeader.push(_Header);
	this.seenNewsDesc.push(_Desc);

	$(this.newsHeadLocation).updateWithText(_Header, this.fadeInterval);
	$(this.newsDescLocation).updateWithText(_Desc, this.fadeInterval);

	return true;

}

news.init = function () {

	if (this.feed === null || (this.feed instanceof Array === false && typeof this.feed !== 'string')) {
		return false;
	} else if (typeof this.feed === 'string') {
		this.feed = [this.feed];
	}

	this.fetchNews();
	this.showNews();

	this.fetchNewsIntervalId = setInterval(function () {
		this.fetchNews()
	}.bind(this), this.fetchInterval)

	this.intervalId = setInterval(function () {
		this.showNews();
	}.bind(this), this.updateInterval);

}