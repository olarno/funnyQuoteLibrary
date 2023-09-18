import json
import tweepy
import os

def read_tweet_config():
    try:
        with open('tweet_config.json', 'r', encoding='utf-8') as config_file:
            config_data = json.load(config_file)
            return config_data
    except FileNotFoundError:
        print("Le fichier de configuration tweet_config.json n'a pas été trouvé.")
        return None

def get_tweet(config, lang):
    if config and lang in config:
        return config[lang][0]  

    return None

def send_tweet(tweet):
    consumer_key = os.environ['9sUgZqWy1dy1ACPLxrnsFBPXf']
    consumer_secret = os.environ['tLp6wcEXN5byom5cbeZn9SHheADkHtfeL8ngjokT2le58sBEIX']
    access_token = os.environ['1192367394309713921-OTBExYZMZ9FWHaS608EZVrL2tsrVvI']
    access_token_secret = os.environ['F2Im9LlKRG5QWZ8ZKGEBUjHn5JjeVa8lm2Al3VjxhG2OW']

    auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
    auth.set_access_token(access_token, access_token_secret)
    api = tweepy.API(auth)

    api.update_status(tweet)

def main():
    config_data = read_tweet_config()

    if config_data:
        tweet_fr = get_tweet(config_data, 'tweets-fr')
        tweet_en = get_tweet(config_data, 'tweets-en')

        # Envoi des tweets
        if tweet_fr:
            send_tweet(tweet_fr)
            print("Tweet en français envoyé:", tweet_fr)
        
        if tweet_en:
            send_tweet(tweet_en)
            print("Tweet en anglais envoyé:", tweet_en)

if __name__ == "__main__":
    main()
