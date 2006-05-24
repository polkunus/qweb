#!/usr/bin/python

""" This is the simplest web app """

import glob, os, sys

sys.path[0:0]=glob.glob('../../python')

import qweb

def helloapp(environ, start_response):
	req = qweb.QWebRequest(environ, start_response)
	req.response_headers['Content-type'] = 'text/plain'
	req.write('Hello World')
	return req

if __name__ == '__main__':
	qweb.qweb_wsgi_autorun(helloapp)


