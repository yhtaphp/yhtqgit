package com.example.spinner;

import java.util.ArrayList;
import java.util.List;

import android.R.string;
import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Spinner;
import android.widget.Toast;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemSelectedListener;

public class MainActivity extends Activity {

	private List<String> list = new ArrayList<String>();
	private Spinner spin;
	private ArrayAdapter<String> adapter;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		// ���������˵�����
		list.add("����");
		list.add("����");
		list.add("����");
		
		spin = (Spinner)findViewById(R.id.list);
		
		// Ϊ�����б�����һ��������
		adapter = new ArrayAdapter<String>(this, android.R.layout.simple_spinner_dropdown_item,list);
		// ���������б�����ʽ
		adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
		
		// �����������ӵ�spinner
		spin.setAdapter(adapter);
		spin.setOnItemSelectedListener(new OnItemSelectedListener() {
	

			@Override
			public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
				// TODO Auto-generated method stub
				Toast.makeText(getApplicationContext(), "��ѡ�е�ʱ��"+adapter.getItem(position), Toast.LENGTH_SHORT).show();
				// ���ÿռ�ɼ�
				spin.setVisibility(View.VISIBLE);
			}

			@Override
			public void onNothingSelected(AdapterView<?> parent) {
				// TODO Auto-generated method stub
				Toast.makeText(getApplicationContext(), "û��", Toast.LENGTH_SHORT).show();
				spin.setVisibility(View.VISIBLE);
			
			}
		});
		
		
	}
}