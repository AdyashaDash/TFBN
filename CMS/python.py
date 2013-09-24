import urllib2,json,sys;
a=urllib2.urlopen(sys.argv[1]).read();
print json.dumps(a);