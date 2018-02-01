from kafka import KafkaProducer
import json

producer = KafkaProducer(bootstrap_servers='localhost:9092')

def sendMessage(topic,params):
    parmas_message = json.dumps(params)
    producer.send(topic, parmas_message.encode('utf-8'))
    producer.flush()

sendMessage("study",{'uid': '607'})