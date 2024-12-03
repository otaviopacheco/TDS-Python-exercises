import networkx as nx
import matplotlib.pyplot as plt

G = nx.Graph()

G.add_node("largada")



nx.draw(G, with_labels=True, node_color='lightblue', edge_color='gray', node_size=800, font_size=15)
plt.title("Exemplo de Grafo com NetworkX")
plt.show()