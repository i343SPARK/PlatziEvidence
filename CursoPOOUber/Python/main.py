from car import Car
from account import Account

car = Car("AMSDE", Account("Andres Lopez", "ASSDEEXZ"))
print(vars(car))
print(vars(car.driver))