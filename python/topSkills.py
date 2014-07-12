from collections import Counter
import os
import sys

arg = sys.argv[1]

path = "skills" + arg + ".txt"

f = open(path)
l = f.readlines()
f.close()

cnt = Counter()
cn = {}

for i in l:
	s = i.strip()

	if s == "HTML 5":
		s = "HTML"
	print s
	"""
	if s in cn.keys():
		cn[s] = 1
	else:
		cn[s] += 1
	"""
	cnt[s] += 1

print cnt

f = open("testSkils.txt")
f2 = f.readlines()
f.close()

for i in range(len(f2)):
	f2[i] = f2[i].strip()


match = {}
noMatch = {}

match["name"] = "cluster"
match["children"] = []

noMatch["name"] = "cluster"
noMatch["children"] = []


for i in cnt:
	t = {}
	t["name"] = i
	t["size"] = cnt[i]
	if i in f2:
		match["children"].append(t)
	else
		noMatch["children"].append(t)

f = open("1.json",'w')
print match
t1 = str(match)
f.close()

f = open("2.json",'w')
print noMatch
t1 = str(noMatch)
f.close()
