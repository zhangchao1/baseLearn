from kafka import KafkaConsumer
from kafka import TopicPartition
import queue
import _thread
class Consumer(object):
        
        def __init__(self,topic,group_id,bootstrap_servers,offset_reset):
                self.topic = topic;
                self.group_id = group_id
                self.bootstrap_servers = bootstrap_servers
                self.offset_reset = offset_reset
                self.current_queue = queue.Queue()
                self.connect()
        
        def connect(self):
                self.kafka = KafkaConsumer(
                   self.topic,
                   auto_offset_reset = self.offset_reset,
                   group_id = self.group_id,
                   bootstrap_servers = self.bootstrap_servers
                )
                self.kafka.topics()
                self.kafka.poll()
                partition = self.kafka.assignment()
                self.kafka.commit_async()
                self.kafka.seek_to_beginning()
                

        def run(self):
               _thread.start_new_thread(self.pool_message()) 
          
        def pool_message(self):
                for msg in self.kafka:
                        self.kafka.commit_async()
                        self.current_queue.put(msg.value)
                        print (self.current_queue.get())
