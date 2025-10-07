package com.example.navigation

import androidx.compose.foundation.layout.Column
import androidx.compose.material3.Button
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.navigation.NavController
import androidx.navigation.compose.rememberNavController


@Composable
fun LoginScreen(navController: NavController){
    Column {
        Text(text = "Tela de Login")

        Button(onClick = { navController.navigate("home") }){
            Text(text = "Acessar Nome")
        }
    }
}
