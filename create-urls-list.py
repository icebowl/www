def string_concat(a):
    b = "<a href = "+'"'+"http://"
    b = b + a + ".tritech.io"
    b = b +'"' + " target ="+ '"'+"_blank"+'"'+">"+a+"</a>&nbsp;"
    return b

if __name__ == '__main__':
	users = ('10','1108','792','7','97','123','20','18','51','14','1611','9','333','55','12','1','21', '42','13','1000','457','5','101')
				
	for n in range (0,len(users)):
		a = users[n]
		b = string_concat(a)
		print(b)



'''
10 1108 792 7 97 123 20 18 51 9999 14 1611 9 333 55 12 1 21 42 13 1000 457 0 5 101
'''
