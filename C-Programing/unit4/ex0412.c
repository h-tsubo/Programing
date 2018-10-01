#include <stdio.h>

int main(void)
{
    int n;
    int i = 0;
    scanf("%d", &n);

    while (n <= 0) {
        puts("Please enter a positive number.");
        scanf("%d", &n);
        }

    puts ("The nuber of digits are");
    
    while (n > 0) {
        i++;
        n /= 10;
        }
    printf("%d\n", i);

    return 0;
    }
