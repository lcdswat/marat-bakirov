from flask import Flask, send_file, render_template
import matplotlib.pyplot as plt
import numpy as np
from scipy.interpolate import splprep, splev
import io

app = Flask(__name__)

def generate_loose_scribble(num_points=30, loops=2, noise_scale=2):
    t = np.linspace(0, 2 * np.pi * loops, num_points)
    r = 20 + np.random.normal(0, noise_scale, size=t.shape)
    x = r * np.cos(t)
    y = r * np.sin(t)

    drift_x = np.cumsum(np.random.normal(0, 0.5, size=t.shape))
    drift_y = np.cumsum(np.random.normal(0, 0.5, size=t.shape))
    x += drift_x
    y += drift_y

    tck, _ = splprep([x, y], s=20)
    unew = np.linspace(0, 1, 1000)
    out = splev(unew, tck)

    return out

@app.route('/generate_svg/<int:loops>/<int:noise>/<int:points>')
def generate_svg(loops, noise, points):
    x, y = generate_loose_scribble(num_points=points, loops=loops, noise_scale=noise)
    
    plt.switch_backend('svg')
    fig, ax = plt.subplots(figsize=(4, 4))  
    ax.plot(x, y, color='black', linewidth=2)  
    ax.axis('off')
    ax.set_aspect('equal')

    buf = io.BytesIO()
    plt.savefig(buf, format='svg', bbox_inches='tight', pad_inches=0)  
    plt.close(fig)
    buf.seek(0)

    # Вместо отправки файла, возвращаем содержимое буфера как строку
    return buf.getvalue().decode('utf-8')

@app.route('/')
def index():
    return render_template('index.html')

if __name__ == '__main__':
    app.run(debug=True)