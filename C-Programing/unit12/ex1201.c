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

    printf("Name : %p\n", &takao.name);
    printf("Height : %p\n", &takao.height);
    printf("Weight : %p\n", &takao.weight);
    printf("Scholors : %p\n", &takao.schols);

    return 0;
    }
