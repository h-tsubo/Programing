#include <stdio.h>
# define NUMBER 5

int search(const int v[], int key, int n)
{
    int i = 0;

    while (1) {
        if (i == n)
            return -1;
        if (v[i] == key)
            return i;
        i++;
        }


    }

int main(void){
    int a[NUMBER];
    int i, ky, idx;

    for (i = 0; i < NUMBER; i++){
        printf("a[%d]:", i);
        scanf("%d", &a[i]);
        }

    printf("The value you search:");
    scanf("%d", &ky);

    idx = search(a, ky, NUMBER);

    if (idx == -1)
        puts("Search failed");
    else
        printf("The value %d is in number %d\n", ky, idx + 1 );
    
    return 0;
    }
