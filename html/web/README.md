directory for python web server
Python 3.6*
cd web/; nohup python3 -m http.server 8000  --directory web >> /dev/null 2>&1 &
Python 3.7*
nohup python3 -m http.server 8000  --directory web >> /dev/null 2>&1 &
