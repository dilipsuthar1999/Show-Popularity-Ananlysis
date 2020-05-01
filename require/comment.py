from vaderSentiment.vaderSentiment import SentimentIntensityAnalyzer 
import sys

text =sys.argv
text.pop(0)
sen=''
for i in range(len(text)):
    sen=sen+' '+str(text[i])

def sentiment_scores(sentence): 
    sid_obj = SentimentIntensityAnalyzer() 
    sentiment_dict = sid_obj.polarity_scores(sentence) 
    if sentiment_dict['compound'] >= 0.05 : 
        print("1") 
    else : 
        print("0") 
 
if __name__ == "__main__" : 
    sentiment_scores(sen)