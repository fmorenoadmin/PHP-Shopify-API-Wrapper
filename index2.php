<!DOCTYPE html>
<html>
<head>
	<title>API</title>
	<script src="http://sdks.shopifycdn.com/js-buy-sdk/v2/latest/index.umd.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		import Client from 'shopify-buy';
		
		import Client from 'shopify-buy/index.umd';

		// Initializing a client to return content in the store's primary language
		const client = Client.buildClient({
		  domain: 'antzara.myshopify.com',
		  storefrontAccessToken: '9318b7a455bd17c456cf48bc2d5a9330'
		});

		// Initializing a client to return translated content
		const clientWithTranslatedContent = Client.buildClient({
		  domain: 'antzara.myshopify.com',
		  storefrontAccessToken: '9318b7a455bd17c456cf48bc2d5a9330',
		  language: 'es-ES'
		});

		client.product.fetchAll().then((products) => {
		  // Do something with the products
		  console.log(products);
		});
	</script>
</body>
</html>