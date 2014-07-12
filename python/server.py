from flask import Flask, request
import os
app = Flask(__name__)

import requests

@app.route("/")
def hello():
    return "Hello World!"

@app.route("/data/",methods=['GET'])
def dataReceive():
	searchword = request.args.get('key','')
	if searchword == "Product Manager":
		searchword = "PM"
	elif  searchword == "Software Engineer":
		searchword = "SE"
	print searchword

	os.system("python topSkills.py " + searchword)

	f = open("1.json")
	l = f.read()
	f.close()

	print l

	return l


if __name__ == "__main__":
    import os

    port = 9005

    # Open a web browser pointing at the app.
    #os.system("open http://localhost:{0}/".format(port))

    # Set up the development server on port 8000.
    app.debug = True
    app.run(port=port, host='0.0.0.0')


