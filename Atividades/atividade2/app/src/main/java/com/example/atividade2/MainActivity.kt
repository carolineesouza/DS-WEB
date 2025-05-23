package com.example.atividade2

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.shape.RoundedCornerShape
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.*
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atividade2.ui.theme.Atividade2Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atividade2Theme {
                MyApp()
            }
        }
    }
}

@Composable
fun MyApp() {
    var compra by remember { mutableStateOf(0) }

    Surface(
        modifier = Modifier
            .fillMaxSize(),
        color = Color(0xFF546E9A)
    ) {
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally,
            modifier = Modifier.fillMaxSize()
        ) {
            Text(
                text = "Produto: Vestido",
                style = TextStyle(color = Color.White, fontSize = 28.sp)
            )

            Text(
                text = "Preço: R$100,00",
                style = TextStyle(color = Color.White, fontSize = 24.sp)
            )

            Spacer(modifier = Modifier.height(32.dp))

            Text(
                text = "Total de compras: $compra",
                color = Color.White,
                fontSize = 20.sp
            )

            Spacer(modifier = Modifier.height(32.dp))

            Botaocompra {
                compra += 1
            }
        }
    }
}

@Composable
fun Botaocompra(onClick: () -> Unit) {
    Card(
        modifier = Modifier
            .clickable { onClick() }
            .padding(10.dp)
            .fillMaxWidth()
            .height(60.dp),
        shape = RoundedCornerShape(16.dp)
    ) {
        Box(
            modifier = Modifier.fillMaxSize(),
            contentAlignment = Alignment.Center
        ) {
            Text(
                text = "Comprar",
                color = Color.Black,
                fontSize = 18.sp
            )
        }
    }
}

@Preview(showBackground = true)
@Composable
fun GreetingPreview() {
    Atividade2Theme {
        MyApp()
    }
}