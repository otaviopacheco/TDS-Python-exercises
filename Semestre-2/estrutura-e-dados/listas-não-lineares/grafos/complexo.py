import networkx as nx
import matplotlib.pyplot as plt

# Criar o grafo
G = nx.Graph()

# Função para adicionar vértices com posição
def adicionar_vertice(nome, x, y, tipo="curva"):
    G.add_node(nome, pos=(x, y), tipo=tipo)

# Função para adicionar arestas
def adicionar_arestas(vertice1, vertice2, peso=1):
    G.add_edge(vertice1, vertice2, weight=peso)

# Adicionar vértices
adicionar_vertice("largada", 0, 0, tipo="largada")
adicionar_vertice("curva1", 2, 4)
adicionar_vertice("reta1", 5, 4)
adicionar_vertice("curva2", 8, 0)

# Adicionar arestas
adicionar_arestas("largada", "curva1")
adicionar_arestas("curva1", "reta1")
adicionar_arestas("reta1", "curva2")

# Obter posições para o desenho
posicoes = nx.get_node_attributes(G, 'pos')

# Desenhar o grafo
plt.figure(figsize=(8, 6))
nx.draw(G, pos=posicoes, with_labels=True, node_color="lightblue", node_size=800)
nx.draw_networkx_edge_labels(
    G, pos=posicoes, edge_labels=nx.get_edge_attributes(G, 'weight')
)
plt.title("Pista de Corrida")
plt.show()
