import networkx as nx
import matplotlib.pyplot as plt

G = nx.DiGraph()

G.add_node("L", pos=(-0.00510, -0.0324))
G.add_node("1", pos=(0.00520, -0.0324))
G.add_node("2", pos=(0.01713, -0.0170))
G.add_node("2A", pos=(0.01753, -0.0148))
G.add_node("2B", pos=(0.01703, -0.0138))
G.add_node("3", pos=(0.00241, -0.0218))
G.add_node("4", pos=(0.0, 0.0))
G.add_node("4A", pos=(0.00800, 0.0130))
G.add_node("5", pos=(0.02183, 0.0226))
G.add_node("6", pos=(0.01363, 0.0525))
G.add_node("6A", pos=(0.00963, 0.0535))
G.add_node("7", pos=(-0.00814, 0.0367))
G.add_node("8", pos=(-0.01163, 0.0384))
G.add_node("8A", pos=(-0.01152, 0.0333))
G.add_node("9", pos=(-0.02211, 0.0224))
G.add_node("10", pos=(-0.015753, -0.0010))
G.add_node("11", pos=(-0.02211 , -0.0262))

G.add_edge("L","1")
G.add_edge("1","2")
G.add_edge("2","2A")
G.add_edge("2A","2B")
G.add_edge("2B","3")
G.add_edge("3","4")
G.add_edge("4","4A")
G.add_edge("4A","5")
G.add_edge("5","6")
G.add_edge("6","6A")
G.add_edge("6A","7")
G.add_edge("7","8")
G.add_edge("8","8A")
G.add_edge("8A","9")
G.add_edge("9","10")
G.add_edge("10","11")
G.add_edge("11","L")
# -0.0095 -0.0162
pos= nx.get_node_attributes(G, 'pos')

nx.draw(G, pos, with_labels=True, node_size=120, node_color='skyblue')
plt.show()

# curvaL: X -0.00510 Y: -0.0324
# curva1: x: 0.01020 Y:-0.0324
# curva2: x: 0.01753, -0.0148
# curva3: x: 0.00241, -0.0218
# curva4: x: 0.0, 0.0
# curva5: x: 0.02183, 0.0226
# curva6: x: 0.01163, 0.0535
# curva7: x: -0.00814, 0.0367
# curva8: x: -0.01163, 0.0384
# curva8A: x: -0.01152, 0.0333
# curva9: x: -0.02211, 0.0224
# curva 10: x: -0.011753, 0
# curva11: x: 0.02300, -0.0292

# G.add_node("L", pos=(-0.00510, -0.0324))
# G.add_node("1", pos=(0.01020, -0.0324))
# G.add_node("2", pos=(0.01753, -0.0148))
# G.add_node("3", pos=(0.00241, -0.0218))
# G.add_node("4", pos=(0.0, 0.0))
# G.add_node("5", pos=(0.02183, 0.0226))
# G.add_node("6", pos=(0.01163, 0.0535))
# G.add_node("7", pos=(-0.00814, 0.0367))
# G.add_node("8", pos=(-0.01163, 0.0384))
# G.add_node("8A", pos=(-0.01152, 0.0333))
# G.add_node("9", pos=(-0.02211, 0.0224))
# G.add_node("10", pos=(-0.011753, 0))
# G.add_node("11", pos=( 0.02300, -0.0292))

# G.add_edge("L","1")
# G.add_edge("1","2")
# G.add_edge("2","3")
# G.add_edge("3","4")
# G.add_edge("4","5")
# G.add_edge("5","6")
# G.add_edge("6","7")
# G.add_edge("7","8")
# G.add_edge("8","8A")
# G.add_edge("8A","9")
# G.add_edge("9","10")
# G.add_edge("10","11")
# G.add_edge("11","L")

# pos= nx.spring_layout(G, seed=42)

# nx.draw(G, pos, with_labels=True, node_size=100, node_color='skyblue')
# plt.show()