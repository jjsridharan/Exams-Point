#include<stdio.h>
#include<unistd.h>
int main()
{
	int fd[2];
	char s[]="abc",c[100];
	pipe(fd);
	pid_t child=fork();
	if(child==0)
	{
		close(fd[0]);
		write(fd[1],s,sizeof(s));
		exit(1);
	}
	else
	{
		close(fd[1]);
		read(fd[0],c,sizeof(c));
	}
}