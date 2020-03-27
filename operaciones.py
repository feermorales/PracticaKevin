n1 = float(input("Ingresa el primer número: "))
n2 = float(input("Ingresa el segundo número: "))

def suma(val1=0, val2=0):
    return val1 + val2

def resta(val1=0, val2=0):
    return val1 - val2

def multi(val1=0, val2=0):
    return val * val2

def operacion(funcion, val1=0, val2=0):
    return funcion(val1, val2)

funcion_suma = suma
resultado_sum = operacion(funcion_suma, n1, n2)

funcion_resta = resta
resultado_res = operacion(funcion_resta, n1, n2)

print("\nEl resultado de la SUMA es: ", resultado_sum)
print("\nEl resultado de la RESTA es: ", resultado_res)

