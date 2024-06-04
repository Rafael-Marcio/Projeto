
def verificar(resposta):
    try:
        float(resposta)  # Tenta converter a resposta para float
        return True  # Se a conversão for bem-sucedida, retorna True
    except ValueError:
        return False  # Se a conversão gerar um ValueError, retorna False
print('Solução para equações de 2° Grau!') 
equacao = False
 
while equacao == False:
  	a = input('Qual o Número do 1° elemento da sua equação?\n R=   ')
  	b = input('Qual o Número do 2° elemento da sua equação?\n R=   ')
  	c = input('Qual o Número do 3° elemento da sua equação?\n R=   ')
  	if verificar(a):
  			if verificar(b):
  					if verificar(c):
  						a = int(a)
  						b = int(b)
  						c = int(c)
  						delta = (b*b) - (4*a*c)
  						x1 =(-b + delta**0.5)/(2*a)
  						x2 =(-b - delta**0.5)/(2*a)
  						print(f"As raizes da sua equação são: { {x1}, {x2} }!")
  						equacao = True
  					else:
  						print('')
  						print('O 3° elemento precisa ser um Número!')
  						print('')
  			else:
  				print('')
  				print('O 2° elemento precisa ser um Número!')
  				print('')
  	else:
  			print('')
  			print('O 1° elemento precisa ser um Número!')
  			print('')
  	