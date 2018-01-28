from kafka import KafkaConsumer
consumer = KafkaConsumer('study',auto_offset_reset='earliest',group_id='consumer-20171019',bootstrap_servers=['localhost:9092'])  
for msg in consumer:
        print (msg)
