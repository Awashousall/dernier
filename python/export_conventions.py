import sys
import mysql.connector
from reportlab.lib.pagesizes import letter
from reportlab.pdfgen import canvas

def generer_pdf_conventions(adresse_email):
    # Configuration de la connexion à la base de données
    db_config = {
        'user': 'root',       # Utilisateur par défaut sur XAMPP
        'password': '',       # Mot de passe par défaut sur XAMPP est généralement vide ou 'root'
        'host': 'localhost',  # Hôte pour une base de données locale
        'database': 'nullable'  # Remplacez par le nom de votre base de données sur XAMPP
    }

    # Connexion à la base de données
    conn = mysql.connector.connect(**db_config)
    cursor = conn.cursor()

    # Requête SQL pour récupérer les données spécifiques à l'adresse email
    query = f"SELECT nom, prenom, adresse, adresse_email, ecole, duree, signature_cabinet, created_at FROM conventions WHERE adresse_email = '{adresse_email}'"
    cursor.execute(query)
    result = cursor.fetchall()

    # Génération du fichier PDF
    filename = f"conventions_{adresse_email.replace('@', '_').replace('.', '_')}.pdf"
    c = canvas.Canvas(filename, pagesize=letter)
    width, height = letter

    # Titre du PDF
    c.setFont("Helvetica-Bold", 16)
    c.drawString(30, height - 50, f"Convention pour {adresse_email}")

    # Données à ajouter au PDF
    c.setFont("Helvetica", 12)
    y_start = height - 80
    line_height = 15

    for row in result:
        y = y_start
        c.drawString(30, y, f"Nom: {row[0]}")  # Ajuster la position en fonction de la longueur de "Nom:"
        y -= line_height
        c.drawString(30, y, f"Prénom: {row[1]}")  # Ajuster la position en fonction de la longueur de "Prénom:"
        y -= line_height
        c.drawString(30, y, f"Adresse: {row[2]}")
        y -= line_height
        c.drawString(30, y, f"Email: {row[3]}")
        y -= line_height
        c.drawString(30, y, f"École: {row[4]}")
        y -= line_height
        c.drawString(30, y, f"Durée: {row[5]}")
        y -= line_height
        c.drawString(30, y, f"Signature: {row[6]}")
        y -= line_height
        c.drawString(30, y, f"Créé le: {row[7]}")
        y -= line_height * 2  # Espacement entre les entrées

    # Sauvegarde et fermeture
    c.save()
    cursor.close()
    conn.close()

# Vérification si le script est exécuté directement
if __name__ == "__main__":
    # Vérification si un argument (adresse email) est passé
    if len(sys.argv) != 2:
        print("Usage: python script.py <adresse_email>")
        sys.exit(1)

    # Récupération de l'adresse email depuis les arguments de ligne de commande
    adresse_email = sys.argv[1]

    # Appel de la fonction pour générer le PDF pour l'adresse email spécifiée
    generer_pdf_conventions(adresse_email)
