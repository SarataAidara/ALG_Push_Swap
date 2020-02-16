# ALG_Push_Swap

sorted in ascending order


The program should display the series of operations that cause this list to be sorted.

The program is made up of two lists of numbers l(a) and l(b)

At the very beginning, l(b) is empty and must contain a certain number of positive or negative numbers.

The goal of the program is to sort the l(a).



To do this, you will only have access to the following operations:

- sa exchange the positions of the first two elements of l(a) (nothing happens if there is not enough
UNITS)

- sb swaps the positions of the first two elements of l(b) (nothing happens if there is not enough
UNITS)

- sc sa and sb at the same time

- pa takes the first element of l(b) and places it in the first position of l(a) (nothing happens if l(b)
is empty)

- pb takes the first element from l(a) and places it in the first position of l(b) (nothing happens if l(a)
is empty)

- ra rotates l(a) towards the beginning. (the first element becomes the last)

- rb rotates l(b) toward the start. (the first element becomes the last)

- rr ra and rb at the same time.

- rra rotates l(a) towards the end. (the last element becomes the first)

- rrb rotates l(b) towards the end. (the last element becomes the first)

- rrr rra and rrb at the same time.

EXAMPLE :

∼/W-ALG-501> php push_swap.php 4 5 156 4.3 | cat -e


rra rra pb rra pb pb pb pa ra pa ra pa ra pa ra // displays in order the name of the functions used for sorting
