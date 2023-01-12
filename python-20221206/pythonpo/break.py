n=0
while n<5:
    if n==3:
        break
    print(n)
    n+=1
print("last n: ",n)
n=0
for x in [0,1,2,4,9,10,3]:
    if x%2==0:
        continue
    print(x)
    n+=1
print("last n : ",n)
sum=0
for n in range(11):
    sum+=n
else:
    print(sum)
sum=0
for n in range(11):
    sum+=n
print(sum)
a=input("please enter an integer: ")
a=int(a)
for i in range(a):
    if i*i==a:
        print(" int sqr", i)
        break
else:
    print("not an int sqr")
