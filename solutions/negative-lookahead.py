# regex_1(?!regex_2)
# 匹配满足regex_1后面不是regex_2的情况，但只返回regex_1，regex_2只做判断
Regex_Pattern = r"(.)(?!\1)"	# Do not delete 'r'.

import re

Test_String = input()

match = re.findall(Regex_Pattern, Test_String)

print("Number of matches :", len(match))