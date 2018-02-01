from baseConsumer import baseConsumer

queue1 = baseConsumer(
    topic = "study",
    group_id="queue1",
    bootstrap_servers="localhost:9092",
    offset_reset="earliest"
)