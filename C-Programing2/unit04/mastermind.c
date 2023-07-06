#include <stdio.h>
#include <time.h>
#include <ctype.h>
#include <stdlib.h>
#include <string.h>

void make4digits(int x[])
{
    int i, j, val;

    for (i = 0; i < 4; i++){
        do{
            val = rand() % 10;
            for (j = 0; j < i; j++) {
                if (val == x[j])
                    break;
                }
            }while (j < i);
        x[i] = val;
        }
    }

int check(const char s[])
{
    int i, j;

    if (strlen(s) != 4)
        return 1;
    for (i = 0; i < 4; i++){
        if (!isdigit(s[i]))
            return 2;
        for (j = 0; j < i; j++)
            if (s[i] == s[j])
                return 3;
        }
    return 0;
    }

void judge(const char s[], const int no[], int *hit, int *blow)
{
    int i, j;

    *hit = *blow = 0;

    for (i = 0; i < 4; i++)
        for(j = 0; j < i; j++)
            if (s[i] == '0' + no[j])
                if (i == j)
                    (*hit)++;
                else
                    (*blow)++;
    }

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

int main(void)
{
    int try_no = 0;
    int chk;
    int hit;
    int blow;
    int no[4];
    char buff[10];
    clock_t start, end;
    
    srand (time(NULL));

    printf("Let's try MasterMind.\nPlease guess four numbers I chose.\nThe same number is not included.\nYou cannnot enter anything besides a number.\n");
    make4digits(no);

    start = clock();
    int i;
    for (i = 0; i < 4; i++)
        printf("%d", no[i]);
        putchar('\n');

    do {
        do {
            printf("Please enter any four numbers:");
            scanf("%s", buff);

            chk = check(buff);
            switch (chk) {
                case 1: puts("Please enter four numbers."); break;
                case 2: puts("Do not enter anything besides a number."); break;
                case 3: puts("Do not enter same number more than twice,"); break;
                }
            } while (chk != 0);
        try_no++;
        judge(buff, no, &hit, &blow);
        print_result(hit + blow, hit);
        } while (hit < 4);

    end = clock();

    printf("You've tried %d times and took %.1f to get the right answer\n", try_no, (double)(end - start) / CLOCKS_PER_SEC);

    return 0;
    }
