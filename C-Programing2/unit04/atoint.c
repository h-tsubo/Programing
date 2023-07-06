#include <stdio.h>
#include <stdlib.h>

int main(void)
{
    char temp[20];
    printf("Please enter an intiger.\n");
    scanf("%s", temp);

    printf("You've entered %d.\n", atoi(temp));

    return 0;
    }
