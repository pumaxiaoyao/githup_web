ps -ef | grep -w 'volleyball.py' | grep -v grep | awk '{print $2}' | xargs kill -9
python /home/python/spider/volleyball.py
