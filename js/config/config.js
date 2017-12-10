var config = {
    lastUpdate: '2017-12-10T13:37:03+00:00',
	feature: {
		calendar: "on",
		compliments: "off",
		news: "on",
		openhab: "off",
		time: "on",
		weather: "on",
                money: "off",
                wunderlist: "on"
	},
    lang: "es_ES",
    time: {
        timeFormat: "24",
        timePosition: "tl"
    },

    money:{
        valor: 0,
        monedas: {
            uncent: 0,
            doscent: 0,
            cincocent: 0,
            diezcent: 0,
            veintecent: 0,
            cinccent: 0,
            uneuro: 0,
            doseuro: 0
        }
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
	    interval: 60000,
		fadeInterval: 1000,
		fetchInterval: 60000,
		calendars: [
			{url: "https://calendar.google.com/calendar/ical/mundomele%40gmail.com/private-92bce97beb6aa67113e1de4d1b01f4e1/basic.ics",color: "#FFFFFF",slice: "99"},
			{url: "https://calendar.google.com/calendar/ical/webmelero%40gmail.com/private-13a49a2191b410cf9abfa863dc14abd8/basic.ics",color: "#FF0000",slice: "99"}
		],
    },
	openhab: {
		interval: 15000,
		fadeInterval: 5000,
		fetchInterval: 2000,
		feed: ["http://10.0.0.1:8081/rest/items/SmartMirrorTXT/?type=json"]
	},
}
