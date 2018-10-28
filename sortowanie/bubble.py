array = [-10,2,1,5,6,876,7,13,125684,9,10,20,-200]


flaga = True

while flaga:
	for i in range(len(array)-1):
		for i in range(len(array)-1):
			if array[i]>array[i+1]:
				array[i], array[i+1]= array[i+1], array[i]
				flaga = True
				break
			else:
				flaga = False

print(array)
	