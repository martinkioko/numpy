#!/usr/bin/env python
# coding: utf-8

# In[1]:


import numpy as np 


# In[9]:


mylist=[1,2,3,4,5,6,7,8,9,9,9]


# In[10]:


mylist


# In[11]:


my_arr=np.array(mylist)


# In[12]:


my_arr


# In[13]:


my_mat=[[1,2,3],[4,5,6,7],[7,8,9]]


# In[14]:


my_mat


# In[15]:


np.array(my_mat)


# In[16]:


np.arange(0,4)


# In[17]:


np.arange(0,10,4)


# In[19]:


np.zeros((3,2))


# In[20]:


np.linspace(0,1,10)


# In[22]:


np.linspace(0,10, 100)


# In[23]:


np.linspace(0,10)


# In[24]:


np.ones((4,6))


# In[25]:


np.eye(6)


# In[28]:


np.random.rand(9)


# In[29]:


np.random.rand(4,6)


# In[30]:


np.random.rand(2)


# In[31]:


np.random.randn(2)


# In[32]:


np.random.randint(1,100)


# In[33]:


np.random.randint(1,21,20)


# In[35]:


arr=np.random.randn(30)


# In[36]:


arr


# In[39]:


arr.reshape(6,5)


# In[43]:


arr.shape


# In[45]:


mat=np.arange(0,11)


# In[47]:


mat[0]


# In[48]:


mat[0:4]


# In[49]:


mat[0:7]


# In[50]:


mat[0:]


# In[51]:


mat[:5]


# In[52]:


mat[0:4]=100


# In[53]:


mat


# In[54]:


arr_2d=np.array([[5,10,15],[20,25,30],[35,40,45]])


# In[55]:


arr_2d


# In[56]:


arr_2d[0]


# In[57]:


arr_2d[2]


# In[60]:


arr_2d[2][2]


# In[62]:


arr_2d[2:]


# In[69]:


arr_2d[:,1]


# In[72]:


arr_2d[::,2::]


# In[ ]:




