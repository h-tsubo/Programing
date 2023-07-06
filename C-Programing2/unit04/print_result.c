#include <time.h>
#include <ctype.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void print_result(int snum, int spos)
{
    if (spos == 4)
        printf("All correct!\n");
    else if (snum == 0)
        printf("None of the numbers you've entered are correct.\n");
        else {
            printf("%d numbers you've entered are correct, ", snum);
            if (spos == 0)
                printf("but none of the positions of the numbers are correct\n");
            else 
                printf("and the numbers whose positions are also correct are %d out of %d correct numbers.\n", spos, snum);
            }
    }
