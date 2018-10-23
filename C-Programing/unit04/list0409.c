#include <stdio.h>

int main(void)
{
    int i = 0;
    int sum = 0;
    int num, tmp;

    printf("Number of people:");
    scanf("%d", &num);
    while (i++ < num){
        printf("No.%d:", i);
        scanf("%d", &tmp);
        sum += tmp;
        }
    printf("Total:%d\n", sum);

    return 0;
    }
