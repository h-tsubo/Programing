#include <stdio.h>
#define puts_alert(str) (putchar('\a'), puts(str))

int main(void)
{
    int n;
    printf("Please enter an integer:");
    scanf("%d", &n);

    if (n)
        puts_alert("Not ZERO");
    else
        puts_alert("ZERO");

    return 0;
    }
