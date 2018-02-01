
from Consumer import Consumer

class baseConsumer(object):
    
    def __init__(self,topic,group_id,bootstrap_servers,offset_reset):
        self.topic = topic;
        self.group_id = group_id
        self.bootstrap_servers = bootstrap_servers
        self.offset_reset = offset_reset
        self.connet()
        
    def connet(self):
        self.kafka = Consumer(self.topic,self.group_id,self.bootstrap_servers,self.offset_reset)
        self.kafka.run()
    
    def recieve(self):
        while True:
            print (self.kafka.current_queue.get())
    
