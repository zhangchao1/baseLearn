from kafka import KafkaConsumer
from kafka import TopicPartition

consumer = KafkaConsumer('study',auto_offset_reset='earliest',group_id='consumer-20171019',bootstrap_servers=['localhost:9092'])

consumer.poll()
pas = consumer.assignment()
consumer.seek_to_beginning()
consumer.commit_async()
for msg in consumer:
        print (msg)
