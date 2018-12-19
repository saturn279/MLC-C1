echo on
cd C:\MinGW\bin
g++ hello.c -o top4
g++ hello.c 2>error.txt
top4 >top3.txt

	