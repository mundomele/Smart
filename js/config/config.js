var config = {
    lastUpdate: '2017-08-08T14:14:41+00:00',
	feature: {
		calendar: "on",
		compliments: "on",
		news: "on",
		openhab: "off",
		time: "on",
		weather: "on",
                wunderlist: "off"
	},
    lang: "es_ES",
    time: {
        timeFormat: "24",
        timePosition: "tm"
    },
    weather: {
	interval: 6000,
	fadeInterval: 1000,
        params: {
            q: "Noia,ES",
            units: "metric",
            lang: "en",
            APPID: "6b07c419359367e58f19fcaa73ff6c5b"
        }
    },
    compliments: {
		interval: 30000,
		fadeInterval: 3000,
        morning: ["Wow, hoy será un día increíble","Levántate dormilón","Aprovecha el día"],
        afternoon: ["Eres increíble!","No vicies y aproveha el día","Sabes que te quieres!"],
        evening: ["O duerme o sal de fiesta!!","Hora de peli!"]
    },
    news: {
		interval: 15000,
		fadeInterval: 1500,
	    fetchInterval: 60000,
        feed: ["http://estaticos.marca.com/rss/futbol/primera-division.xml","http://estaticos.marca.com/rss/motor/formula1.xml"]
    },
	calendar: {
		maxItemsDisplayed: 10,
	    interval: 1000,
		fadeInterval: 1000,
		fetchInterval: 60000,
		calendars: [
			{url: "https://calendar.google.com/calendar/ical/mundomele%40gmail.com/private-92bce97beb6aa67113e1de4d1b01f4e1/basic.ics",color: "#04FF00",slice: "99"},
			{url: "https://calendar.google.com/calendar/ical/webmelero%40gmail.com/private-13a49a2191b410cf9abfa863dc14abd8/basic.ics",color: "#FFFFFF",slice: "99"},
			{url: "https://calendar.google.com/calendar/ical/es.spain%23holiday%40group.v.calendar.google.com/public/basic.ics",color: "#FF2F2F",slice: "99"}
		],
    },
	openhab: {
		interval: 15000,
		fadeInterval: 5000,
		fetchInterval: 2000,
		feed: ["http://10.0.0.1:8081/rest/items/SmartMirrorTXT/?type=json"]
	},
}
