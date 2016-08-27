# Magento 2: Twitter
Twitter feeds using the most popular [TwitterOAuth][twitter-oauth] PHP library.

Multiple configuration options giving you full control over your tweets. Global integration option available along with an easy to use widget.

## Installation
Recommended installation through composer, within your Magento root directory enter the following:

    composer require jasonalvis/magento2-twitter

## Create your Twitter app
You will need to create a Twitter app to get your API credentials. Please use the following steps as a guide:

  1. Go to [https://apps.twitter.com][twitter-apps] and login using your Twitter account credentials
  2. Create a new application filling in your details. The Callback URL can be left empty
  3. Click on the 'Keys and Access Tokens' tab and then 'Create my access token'

## Module configuration
The module configuration can be found through the main menu under Jason Alvis. As a minimum please ensure you enter your screen name, consumer key, consumer key secret, access token and access token secret.

### Display settings
Multiple settings available giving you full control over your tweets including:

  * Number of tweets to show
  * Show user follow button
  * Show the user screen name
  * Show the user profile image
  * Make URL links clickable
  * Show the reply link
  * Show the retweet link
  * Show the favorite link
  * Add rel="nofollow" for URL links
  * Make # tags clickable
  * Make @ tags clickable
  * Open links in a new window

### Media settings
Multiple settings for when tweets include images:

  * Show media URLs, if set to no media URLs will be stripped from the tweet
  * Show media as clickable links not images
  * Show media as images not links
  * Select the media image size, thumbnail, small, medium or large

### Search settings
Display tweets based off a search query, used when displaying searched tweets.

## Integration
By default Twitter displays in the main content.

Move xml block within your theme `<theme_dir>/Jasonalvis_Twitter/layout/default.xml`:

```xml
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <body>
        <move element="jasonalvis_twitter.latest" destination="footer" after="-" />
        <move element="jasonalvis_twitter.mentions" destination="footer" after="-" />
        <move element="jasonalvis_twitter.search" destination="footer" after="-" />
    </body>
</page>
```

Remove xml block within your theme `<theme_dir>/Jasonalvis_Twitter/layout/default.xml`:

```xml
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <body>
        <referenceContainer name="main">
          <referenceBlock name="jasonalvis_twitter.latest" remove="true" />
          <referenceBlock name="jasonalvis_twitter.mentions" remove="true" />
          <referenceBlock name="jasonalvis_twitter.search" remove="true" />
        </referenceContainer>
    </body>
</page>
```

Override the default templates within your theme create the following files:

    <theme_dir>/Jasonalvis_Twitter/templates/latest-tweets.phtml
    <theme_dir>/Jasonalvis_Twitter/templates/mentions-tweets.phtml
    <theme_dir>/Jasonalvis_Twitter/templates/search-tweets.phtml

The original contents of the files can be found under:

    <root_dir>/vendor/jasonalvis/magento2-twitter/view/frontend/templates/latest-tweets.phtml
    <root_dir>/vendor/jasonalvis/magento2-twitter/view/frontend/templates/mentions-tweets.phtml
    <root_dir>/vendor/jasonalvis/magento2-twitter/view/frontend/templates/search-tweets.phtml

### Widget
Alternatively you can use the Twitter Feed widget which has the following settings available:

  * Number of tweets to show
  * Title
  * Type of feed to show, latest tweets, mentioned tweets or search tweets
  * Search query

[twitter-api]: https://dev.twitter.com/oauth/overview/introduction
[twitter-oauth]: https://github.com/abraham/twitteroauth
[twitter-apps]: https://apps.twitter.com