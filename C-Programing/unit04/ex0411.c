#include <stdio.h>

int main(void)
{
    int n;
    scanf("%d", &n);

    while (n <= 0) {
        puts("Please enter a positive number.");
        scanf("%d", &n);
        }

    puts ("Switch the number digits.");
    
    while (n > 0) {
        printf("%d", n % 10);
         n /= 10;
        }
    puts("\n");

    return 0;
    }
