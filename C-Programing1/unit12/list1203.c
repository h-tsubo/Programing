#include <stdio.h>
#define NAME_LEN 64

struct student {
    char name[NAME_LEN];
    int height;
    float weight;
    long schols;
    };

int main(void)
{
    struct student takao = {"Takao", 173, 86.2};

    printf("Name : %s\n", takao.name);
    printf("Height : %d\n", takao.height);
    printf("Weight : %.1f\n", takao.weight);
    printf("Scholors : %ld\n", takao.schols);

    return 0;
    }
