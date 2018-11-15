#include <stdio.h>
#include <string.h>

#define NAME_LEN 64

struct student {
    char  name[NAME_LEN];
    int   height;
    float weight;
    long  schols;
    };
int main(void)
{
    struct student sanaka;
    strcyp(sanaka.name, "Sanaka");
    sanaka.height = 175;
    sanaka.weight = 62.5;
    sanaka.schols = 73000;

    printf("NAME   : %s", sanaka.name);
    printf("HEIGHT : %d", sanaka.height);
    printf("NAME   : %.1f", sanaka.weight);
    printf("NAME   : %ld", sanaka.schols);


    return 0;
    }
