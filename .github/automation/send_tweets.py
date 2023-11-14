import tweepy
import sys

def send_tweet(version):
    auth = tweepy.OAuthHandler(
        sys.environ['TWITTER_CONSUMER_KEY'],
        sys.environ['TWITTER_CONSUMER_SECRET']
    )
    auth.set_access_token(
        sys.environ['TWITTER_ACCESS_TOKEN'],
        sys.environ['TWITTER_ACCESS_TOKEN_SECRET']
    )

    api = tweepy.API(auth)
    tweet_text = f"🚀 New version released: {version}! Check it out on GitHub. #Release #OpenSource"
    
    api.update_status(status=tweet_text)

if __name__ == "__main__":
    version = sys.argv[1]
    send_tweet(version)