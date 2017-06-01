Chatapp (Php + nodejs simple)
- clone 
- create db: nodetest:
	CREATE TABLE `message` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

- Install nodejs
	+	npm install
	+	npm install socket.io
	+	npm install express
	
- Run node server
	+ node js/nodeServer.js
	
	Enjoy!
