grid=[
    ['.','.','.','.','.','.'],
    ['.','o','o','.','.','.'],
    ['o','o','o','o','.','.'],
    ['o','o','o','o','o','.'],
    ['.','o','o','o','o','o'],
    ['o','o','o','o','o','.'],
    ['o','o','o','o','.','.'],
    ['.','o','o','.','.','.'],
    ['.','.','.','.','.','.']
]
for num1 in range(len(grid[0])):
    for i in range(len(grid)):
        if i==len(grid)-1:
            print(grid[i][num1])
        else:
            print(grid[i][num1],end="")