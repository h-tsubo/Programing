#include <stdio.h>
enum animal { Dog, Cat, Monkey, Invalid };

void dog(void)
{
    puts("ワンワン！");
    }

void cat(void)
{
    puts("ニャオ〜！");
    }

void monkey(void)
{
    puts("キッキッ！");
    }
enum animal select(void)
{
    int temp;
    do {
        printf("0:Dog 1:Cat 2:Monkey 3:Break! ->");
        scanf("%d", &temp);
        } while (temp < Dog || temp > Invalid);

    return temp;
    }

int main(void)
{
    enum animal selected;

    do {
        switch (selected = select()){
            case Dog : dog();  break;
            case Cat : cat();  break;
            case Monkey : monkey();  break;
            }
        } while (selected != Invalid);

    return 0;
    }
