//Write a C program that, given an array A[] of n numbers and another number x, determines whether or not there //exist two elements in S whose sum is exactly x. 
#include<iostream>
using namespace std;
int main()
{
	int n;
	cin>>n;
	int a[n];
	for(int i=0;i<n;i++)
	{
		cin>>a[i];
	}	
	cin>>x;
	for(int i=0;i<n;i++)
	{
		for(int j=i+1;j<n;j++)
		{
			if(a[i]+a[j]==x)
			{
				cout<<"YES INDEX="<<i<<" "<<j<<endl;
			}
		}
	}
}
