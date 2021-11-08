<!DOCTYPE html>
<html>
<metacharset="utf-8">
<title>Basic Concept of Web Technology</title>
<body>
<h1>Lab 1 - 8238 Donald Sincennes Question/Answers</h1>
<ol>
	<li><strong>Define HTML: </strong> HTML stands for Hyper Text Markup Language. It is a basic scripting language used for web pages on the internet. </li>
	<li><strong>Define Client-server model of communications: </strong> It is the webs model of communication. The <strong>server</strong> is an agent listening for queries from <strong>clients</strong> who make requests.</li>
	<li><strong>Write down the name of different types of servers: </strong>
		<ol>
			<li>Data Server</li>
			<li>Application Server</li>
			<li>Authentication Server</li>
			<li>Email Server</li>
			<li>Web Server</li>
			<li>Media Server</li>
		</ol>
	</li>
	<li><strong>Define a Web Server: </strong>A web server is a computer software/hardware that accepts requests via HTTP.</li>
	<li><strong>Define Data Centers: </strong>A data center is a dedicated space, usually a building that is used to house servers, switches, storage systems etc. It helps organize application and data.</li>
	<li><strong>Why do we need a Uniform Resource Locator (URL): </strong>It allows clients to request particular resources from a server.</li>
	<li><strong>Give an example of Uniform Resource Locator (URL) and specify all components of an URL: </strong>https://www.canadacomputers.com/product_info.php?cPath=43_557_559&item_id=195061
		<ol>
			<li><strong>Https : </strong> Protocol</li>
			<li><strong>www.canadacomputers.com : </strong> Pomain</li>
			<li><strong>product_info.php : </strong> Path</li>
			<li><strong>cPath=43_557_559&item_id=195061 : </strong>Queury</li>
			<li><strong>No fragment</strong></li>
		</ol>
	</li>
	<li><strong>What is the difference between a static and a dynamic web site: </strong>Static webpages remain the same until changed manually, where as Dynamic is created at run time and page content varies user to user.</li>
	<li><strong>Why do we need Domain Name System (DNS): </strong>DNS helps humans remember addressed. Instead of an IP address, we must only remember google.ca as an example.</li>
	<li><strong>Describe in detail the process of DNS address resolution: </strong>A user requests to visit google.ca. The computer checks the cache for the IP, then checks ISP's DNS server, which asks root, com and dns Server. Sends info
	back to the DNS resolver then displays the requested page.</li>
	<li><strong>Give some examples of generic top-Level domains (gTLD): </strong>
		<ul>
			<li>.com</li>
			<li>.net</li>
			<li>.org</li>
		</ul>
	</li>
	<li><strong>Give some examples of country code top-Level domains (ccTLD): </strong>
		<ul>
			<li>.ca</li>
			<li>.uk</li>
			<li>.ru</li>
		</ul>
	</li>
	<li><strong>How can you pass a user’s information from the client to the web server: </strong>Query Strings.</li>
	<li><strong>What is the function (purpose) of Hypertext Transfer Protocol (HTTP): </strong>Establishes TCP connection, waits for requests, and responds with response code, headers and optional message.</li>
	<li><strong>Describe how a single web page is displayed on a web browser: </strong>Client requests the page, then the brower parses the returned HTML, to get all the information needed. When retrieved the page is fully loaded to the user</li>
	<li><strong>Give some examples of HTTP request methods: </strong>GET /picture.jpg, POST /formProcess.php</li>
</ol>
</body>
</html>
