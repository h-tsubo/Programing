#include <stdio.h>

int main(void)
{
    int i;
    char name[3][128];

    for (i = 0; i < 3; i++){
        printf("name[%d]:", i);
        scanf("%s", name[i]);
        }

    for (i = 0; i < 3; i++)
        printf("name[%d] = \"%s\"\n", i, name[i]);

    return 0;
    }
